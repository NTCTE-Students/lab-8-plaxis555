<?php

trait Cacheable {
    private array $cache = [];

    public function getCache(string $key) {
        return $this->cache[$key] ?? null;
    }

    public function setCache(string $key, $value): void {
        $this->cache[$key] = $value;
    }

    public function clearCache(): void {
        $this->cache = [];
    }
}

class DataProvider {
    use Cacheable;

    public function fetchData(string $query) {
        // Проверяем кэш перед выполнением запроса
        $cachedResult = $this->getCache($query);
        if ($cachedResult !== null) {
            return $cachedResult;
        }

        // Имитация тяжелого запроса к данным
        $result = "Data for query: {$query}"; // Здесь может быть реальный запрос к БД или API
        usleep(200000); // Имитация задержки 0.2 секунды

        // Сохраняем результат в кэш
        $this->setCache($query, $result);

        return $result;
    }
}

class ProductRepository {
    use Cacheable;

    public function findProduct(int $id) {
        $cacheKey = "product_{$id}";
        $cachedProduct = $this->getCache($cacheKey);
        if ($cachedProduct !== null) {
            return $cachedProduct;
        }

        // Имитация запроса к базе данных
        $product = [
            'id' => $id,
            'name' => "Product {$id}",
            'price' => rand(100, 1000)
        ];
        usleep(100000); // Имитация задержки 0.1 секунды

        $this->setCache($cacheKey, $product);

        return $product;
    }

    public function clearProductCache(int $id): void {
        $this->clearCache("product_{$id}");
    }
}

