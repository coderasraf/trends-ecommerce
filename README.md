# Trends E-commerce Website

A fashion-style e-commerce storefront built with core PHP and MySQL, featuring a database-driven catalog, IP-based cart and wishlist, and a Bootstrap admin dashboard template.

![PHP](https://img.shields.io/badge/PHP-777BB4?logo=php&logoColor=white) ![MySQL](https://img.shields.io/badge/MySQL-4479A1?logo=mysql&logoColor=white) ![Bootstrap](https://img.shields.io/badge/Bootstrap-4-7952B3?logo=bootstrap&logoColor=white) ![jQuery](https://img.shields.io/badge/jQuery-0769AD?logo=jquery&logoColor=white)

## Overview

"Trends" is a learning project from 2021 for practicing server-rendered PHP with MySQL. The storefront reads its slider, menu, logo, categories, and products from the database. Pages such as checkout, sign-up, account, blog, contact, and FAQs, as well as the `admin/` panel, are front-end templates that are not yet wired to the database.

## Features

**Storefront**

- Homepage with database-driven hero slider, logo, and navigation menu
- "New Arrivals" and "Trending Now" product sections
- Shop page with filtering by product category and by category/brand
- Product details page with size and quantity selection
- Add to cart, view cart with subtotal/total, and remove items
- Add to favourites (wishlist), favourites page, and remove from favourites
- Cart and wishlist tied to the visitor's IP address (no login required)
- Newsletter subscription form that saves emails and prevents duplicates
- Static pages: blog, contact, FAQs, checkout, my account, sign-up

**Admin (UI template)**

- Login and registration screens
- Dashboard, add product (TinyMCE editor), all products, all customers, and orders pages
- DataTables tables with export buttons (copy, CSV, print)

## Tech Stack

- PHP (procedural, `mysqli`)
- MySQL / MariaDB
- HTML5, CSS3, Bootstrap 4
- jQuery, Owl Carousel, DataTables, TinyMCE, Font Awesome

## Getting Started

### Prerequisites

- PHP 7+ with `mysqli`
- MySQL or MariaDB
- XAMPP, WAMP, MAMP, Laragon, or a similar local stack

### Installation

1. Clone into your web root:

   ```bash
   git clone https://github.com/coderasraf/trends-ecommerce.git
   ```

2. Create a MySQL database named `trends`. No SQL dump is included in the repository; the code queries these tables:
   `products`, `product_category`, `category`, `cartitem`, `add_favourite`, `slider`, `logo`, `menu`, `contact_info`, `tbl_subscribe`.
3. Adjust the connection in `config/db.php` if needed:

   ```php
   $con = mysqli_connect('localhost', 'root', '', 'trends');
   ```

4. Open `http://localhost/trends-ecommerce/` for the store and `http://localhost/trends-ecommerce/admin/` for the admin template.

## Project Structure

```text
trends-ecommerce/
├── index.php            # Homepage (slider, new arrivals, trending, newsletter)
├── shop.php             # Catalog with category filters
├── details.php          # Product page + add to cart
├── cart.php, delcart.php
├── add_favo.php, myfav.php, delete.php, fav_item.php
├── checkout.php, signup.php, myaccount.php, contact.php, blog.php, faqs.php
├── config/db.php        # Database connection
├── functions/functions.func.php  # Catalog, cart and pricing helpers
├── inc/                 # Header, footer, slider, sidebar partials
├── admin/               # Admin dashboard template (Bootstrap + DataTables)
├── assets/              # Site CSS, JS, images
└── vendors/             # Bootstrap, Owl Carousel, Font Awesome
```

## Security Notes

This project is for learning only. Query parameters (for example `id`, `p_id`, `cat_pro`) are concatenated directly into SQL, so prepared statements and input validation should be added before any real deployment.

## Author

Built by **Ashraf Siddik**, Shopify developer & CRO specialist.
- Website: [ashraf-siddik.com](https://ashraf-siddik.com)
- GitHub: [@coderasraf](https://github.com/coderasraf)
