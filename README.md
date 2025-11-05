# Yii2 API Skeleton

**Yii2 API Skeleton** is a starter project for building RESTful APIs using Yii2. It provides a ready-to-use structure, helper scripts, and example configurations to accelerate your API development.

---

## 1. Install Yii2

```bash
composer create-project --prefer-dist yiisoft/yii2-app-basic myapp
```

## 2. Add the repository and package to `composer.json`

Open your project's `composer.json` and add the following sections:

```json
"repositories": [
    {
        "type": "composer",
        "url": "https://asset-packagist.org"
    }
],
"require-dev": {
    "rahmatsyaparudin/yii2-api-skeleton": "dev-main"
},
"scripts": {
    "skeleton-update": [
        "composer update rahmatsyaparudin/yii2-api-skeleton --ignore-platform-reqs",
        "php scripts/install-skeleton.php"
    ],
    "skeleton-copy-examples": [
        "php scripts/copy-examples.php"
    ]
}
```

## 3. Copy skeleton scripts

Copy the `scripts` folder from the package to your project root:

```bash
cp -r -Force vendor/rahmatsyaparudin/yii2-api-skeleton/scripts/* ./scripts
```

## 4. Install the skeleton

Run the custom Composer script to install the skeleton files:

```bash
composer skeleton-update
```

This command will set up the necessary folder structure and example configurations in your project.

## 5. Copy example files (first-time setup only)

Run this command only the first time you set up the skeleton:
This will copy example configuration and code files to your project for reference and customization.

## Usage

```bash
composer skeleton-copy-examples
```

## 6. Dependensi Composer Utama

Skeleton will add the following dependencies to your `composer.json`:

- `yiisoft/db-pgsql`: `^1.0`
- `mongodb/mongodb`: `^1.20`
- `firebase/php-jwt`: `^6.10`
- `paragonie/sodium_compat`: `^2.0`
- `vlucas/phpdotenv`: `^5.6`

Apply updates or re-install skeleton components without affecting your existing project code.

## 7. Update Composer Dependencies
Update all dependencies in `composer.json`:

```bash
composer update
```

## Notes

This package is meant for development only, so it is added under require-dev.

Make sure to adjust your configuration files after copying examples to match your environment.
Apply updates or re-install skeleton components without affecting your existing project code.
