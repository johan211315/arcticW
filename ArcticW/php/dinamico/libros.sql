CREATE TABLE libros (
  id INT AUTO_INCREMENT PRIMARY KEY,
  titulo VARCHAR(255) NOT NULL,
  autor VARCHAR(255) NOT NULL,
  descripcion TEXT,
  precio DECIMAL(10, 2),
  portada VARCHAR(255),
  archivo VARCHAR(255)
);

INSERT INTO libros (titulo, autor, descripcion, precio, portada, archivo) VALUES
('Lo que el viento se llevó', 'Margaret Mitchell', 'Descripción del libro...', 9.99, 'portada1.jpg', 'libro1.pdf'),
('El libro de los 5 anillos', 'Miyamoto Musashi', 'Descripción del libro...', 5.99, 'portada2.jpg', 'libro2.pdf'),
('Platón: La República', 'Platón', 'Descripción del libro...', 7.99, 'portada3.jpg', 'libro3.pdf'),
('El arte de la guerra', 'Sun Tzu', 'Descripción del libro...', 8.99, 'portada4.jpg', 'libro4.pdf'),
('La vuelta al mundo en 80 días', 'Jules Verne', 'Descripción del libro...', 6.99, 'portada5.jpg', 'libro5.pdf'),
('Cada historia cuenta', 'Autor Desconocido', 'Descripción del libro...', 4.99, 'portada6.jpg', 'libro6.pdf'),
('Mein Kampf', 'Adolf Hitler', 'Descripción del libro...', 10.99, 'portada7.jpg', 'libro7.pdf'),
('Dr. Jekyll & Mr. Hyde', 'Robert Louis Stevenson', 'Descripción del libro...', 5.49, 'portada8.jpg', 'libro8.pdf'),
('El retrato de una dama', 'Henry James', 'Descripción del libro...', 6.49, 'portada9.jpg', 'libro9.pdf'),
('Drácula', 'Bram Stoker', 'Descripción del libro...', 8.49, 'portada10.jpg', 'libro10.pdf'),
('Cien años de soledad', 'Gabriel García Márquez', 'Descripción del libro...', 11.99, 'portada11.jpg', 'libro11.pdf'),
('Diseño de portada de libro', 'Autor Desconocido', 'Descripción del libro...', 3.99, 'portada12.jpg', 'libro12.pdf'),
('Nuestra señora de París', 'Victor Hugo', 'Descripción del libro...', 7.49, 'portada13.jpg', 'libro13.pdf'),
('Hasta que el verano acabe', 'Autor Desconocido', 'Descripción del libro...', 4.49, 'portada14.jpg', 'libro14.pdf'),
('El bosque mágico', 'Autor Desconocido', 'Descripción del libro...', 6.19, 'portada15.jpg', 'libro15.pdf'),
('La vida dentro de tu cabeza', 'Autor Desconocido', 'Descripción del libro...', 7.99, 'portada16.jpg', 'libro16.pdf'),
('Cruce de caminos', 'Autor Desconocido', 'Descripción del libro...', 5.49, 'portada17.jpg', 'libro17.pdf'),
('La naranja mecánica', 'Anthony Burgess', 'Descripción del libro...', 9.49, 'portada18.jpg', 'libro18.pdf'),
('Mamá nos dijo adiós', 'Autor Desconocido', 'Descripción del libro...', 4.99, 'portada19.jpg', 'libro19.pdf');
