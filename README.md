<h1>
    Easy Coding Standard rules
</h1>

<p>
Created by <a href="https://mikelgoig.com">Mikel Goig</a>.
</p>

<p>
    <a href="https://github.com/mikelgoig/easy-coding-standard-rules">
        View Repository
    </a>
</p>

---

![Packagist Version](https://img.shields.io/packagist/v/mikelgoig/easy-coding-standard-rules)
![Packagist Downloads](https://img.shields.io/packagist/dt/mikelgoig/easy-coding-standard-rules)
![Packagist PHP Version](https://img.shields.io/packagist/dependency-v/mikelgoig/easy-coding-standard-rules/php)

**This package provides you with
opinionated [Easy Coding Standard](https://github.com/easy-coding-standard/easy-coding-standard) rules considering
modern PHP best practices and providing consistency.**

## 😎 Installation

1. Install this package using Composer:

    ```bash
    composer require --dev mikelgoig/easy-coding-standard-rules
    ```

## 🛠️ Configuration

1. Add the rule sets in your `ecs.php` file:

    ```php
    use MikelGoig\EasyCodingStandard\SetList as CodingStandard;
    use Symplify\EasyCodingStandard\Config\ECSConfig;
    
    return ECSConfig::configure()
        ->withSets([CodingStandard::DEFAULT, CodingStandard::RISKY]);
    ```

2. Run ECS:

    ```bash
    vendor/bin/ecs
    ```
