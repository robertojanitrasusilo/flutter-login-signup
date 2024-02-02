CREATE DATABASE joki_crud_yogie;
USE  joki_crud_yogie;


CREATE TABLE login (
    ID INT NOT NULL AUTO_INCREMENT,
    nama VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL,
    isAdmin TINYINT(1) DEFAULT 0,
    PRIMARY KEY (ID)
);

INSERT INTO login (nama, email, password, isAdmin) VALUES
('Admin', 'admin@gmail.com', 'admin', 1);

CREATE TABLE buku (
    ID INT NOT NULL AUTO_INCREMENT,
    nama VARCHAR(50) NOT NULL,
    penerbit VARCHAR(50) NOT NULL,
    penulis VARCHAR(50) NOT NULL,
    tahun VARCHAR(50) NOT NULL,
    deskripsi TEXT NOT NULL,
    foto TEXT NOT NULL,
    tersedia TINYINT(1) DEFAULT 1,
    harga integer, -- Assuming a decimal data type for the price
    PRIMARY KEY (ID)
);


INSERT INTO buku (nama, penerbit, penulis, tahun, deskripsi, foto, tersedia, harga) VALUES
('The Fellowship of the Ring', 'Middle-earth Publishers', 'J.R.R. Tolkien', '1954', 'The first volume of The Lord of the Rings series.', 'path/to/fellowship_of_the_ring.jpg', 1, 150000),
('The Two Towers', 'Middle-earth Publishers', 'J.R.R. Tolkien', '1954', 'The second volume of The Lord of the Rings series.', 'path/to/the_two_towers.jpg', 0, 180000),
('The Return of the King', 'Middle-earth Publishers', 'J.R.R. Tolkien', '1955', 'The third and final volume of The Lord of the Rings series.', 'path/to/return_of_the_king.jpg', 1, 200000),
('The Hobbit', 'Shire Publishing', 'J.R.R. Tolkien', '1937', 'A prelude to The Lord of the Rings, follows Bilbo Baggins on his unexpected journey.', 'path/to/the_hobbit.jpg', 1, 130000),
('Silmarillion', 'Middle-earth Publishers', 'J.R.R. Tolkien', '1977', 'A collection of mythopoeic stories providing background and history for Middle-earth.', 'path/to/silmarillion.jpg', 0, 160000);


SELECT * FROM login;
SELECT * FROM register;
SELECT * FROM buku;
