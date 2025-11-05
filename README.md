# Yii2 API Skeleton

**Yii2 API Skeleton** is a starter project for building RESTful APIs using Yii2. It provides a ready-to-use structure, helper scripts, and example configurations to accelerate your API development.

---

## 1. Add the repository and package to `composer.json`

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
        "php scripts/install-skeleton.php"
    ],
    "skeleton-copy-examples": [
        "php scripts/copy-examples.php"
    ]
}
```

## 2. Copy skeleton scripts

Copy the `scripts` folder from the package to your project root:

```bash
cp -r vendor/rahmatsyaparudin/yii2-api-skeleton/scripts ./scripts
```

## 3. Install the skeleton

Run the custom Composer script to install the skeleton files:

```bash
composer skeleton-update
```


This command will set up the necessary folder structure and example configurations in your project.

## 4. Copy example files (first-time setup only)

Run this command only the first time you set up the skeleton:
This will copy example configuration and code files to your project for reference and customization.

## Usage

```bash
composer skeleton-copy-examples
```

Apply updates or re-install skeleton components without affecting your existing project code.

## Notes

This package is meant for development only, so it is added under require-dev.

Make sure to adjust your configuration files after copying examples to match your environment.
Apply updates or re-install skeleton components without affecting your existing project code.
