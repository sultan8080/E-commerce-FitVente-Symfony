<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Cart;
use App\Entity\User;
use App\Entity\Orders;
use App\Entity\Product;
use App\Entity\Category;
use App\Entity\OrderItem;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    private UserPasswordHasherInterface $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();
        // Create Users
        $users = [];
        for ($i = 0; $i < 2; $i++) {
            $user = new User();
            $user->setEmail($faker->email);
            $user->setPassword($this->passwordHasher->hashPassword($user, "password123"));
            $user->setRoles(["ROLE_USER"]);
            $user->setFirstName($faker->firstName);
            $user->setLastName($faker->lastName);
            $user->setCreatedAt(new \DateTimeImmutable());
            $manager->persist($user);
            $users[] = $user;
        }

        for ($i = 0; $i < 2; $i++) {
            $admin = new User();
            $admin->setEmail($faker->email);
            $admin->setPassword($this->passwordHasher->hashPassword($admin, "admin123"));
            $admin->setRoles(["ROLE_ADMIN"]);
            $admin->setFirstName($faker->firstName);
            $admin->setLastName($faker->lastName);
            $admin->setCreatedAt(new \DateTimeImmutable());
            $manager->persist($admin);
            $users[] = $admin;
        }
         // Create Categories
         $categories = [];
         for ($i = 0; $i < 5; $i++) {
             $category = new Category();
             $category->setName($faker->word);
             $category->setDescription($faker->sentence);
             $manager->persist($category);
             $categories[] = $category;
         }
         
        // Create Products
        $products = [];
        for ($i = 0; $i < 20; $i++) {
            $product = new Product();
            $product->setName($faker->word);
            $product->setDescription($faker->paragraph());
            $product->setPrice($faker->randomFloat(2, 10, 1000));
            $product->setStock($faker->numberBetween(1, 50));
            $product->setCategory($categories[array_rand($categories)]);
            $product->setCreatedAt(new \DateTimeImmutable());
            $product->setImage($faker->imageUrl(640, 480, 'products'));
            $manager->persist($product);
            $product->setIsAvailable($faker->boolean);
            $products[] = $product;
        }

        // Create Orders
        $orders = [];
        for ($i = 0; $i < 5; $i++) {
            $order = new Orders();
            $order->setUser($users[array_rand($users)]);
            $order->setOrderDate(new \DateTimeImmutable());
            $order->setStatus($faker->randomElement(["Pending", "Paid", "Shipped", "Delivered", "Cancelled"]));
            $order->setTotalAmount($faker->randomFloat(2, 50, 2000));
            $order->setShippingAddress($faker->address);
            $manager->persist($order);
            $orders[] = $order;
        }
                    // Create Order Items
        for ($i = 0; $i < 5; $i++) {
            $orderItem = new OrderItem();
            $orderItem->setOrders($orders[array_rand($orders)]);
            $orderItem->setProduct($products[array_rand($products)]);
            $orderItem->setQuantity($faker->numberBetween(1, 5));
            $orderItem->setUnitPrice($faker->randomFloat(2, 10, 500));
            $orderItem->setTotalPrice($faker->randomFloat(2, 10, 1000));
            $manager->persist($orderItem);
        }
        // Create Carts
        $carts = [];
        for ($i = 0; $i < 5; $i++) {
            $cart = new Cart();
            $cart->setUser($users[array_rand($users)]);
            $cart->setCreatedAt(new \DateTimeImmutable());
            $manager->persist($cart);
            $carts[] = $cart;
        }


        $manager->flush();
    }
}
