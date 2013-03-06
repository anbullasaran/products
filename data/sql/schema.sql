CREATE TABLE customers (id BIGINT AUTO_INCREMENT, customer_name VARCHAR(255), customer_type VARCHAR(255), location VARCHAR(255), contact_addr TEXT, email VARCHAR(255) UNIQUE, phone_number VARCHAR(255), created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE product (id BIGINT AUTO_INCREMENT, category_id BIGINT NOT NULL, product_name VARCHAR(255), product_key VARCHAR(255), unit_price BIGINT, description TEXT NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX category_id_idx (category_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE product_category (id BIGINT AUTO_INCREMENT, category_name VARCHAR(255) NOT NULL UNIQUE, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE orders (product_id BIGINT, customer_id BIGINT, PRIMARY KEY(product_id, customer_id)) ENGINE = INNODB;
ALTER TABLE product ADD CONSTRAINT product_category_id_product_category_id FOREIGN KEY (category_id) REFERENCES product_category(id) ON DELETE CASCADE;
ALTER TABLE orders ADD CONSTRAINT orders_product_id_product_id FOREIGN KEY (product_id) REFERENCES product(id) ON DELETE CASCADE;
ALTER TABLE orders ADD CONSTRAINT orders_customer_id_customers_id FOREIGN KEY (customer_id) REFERENCES customers(id) ON DELETE CASCADE;
