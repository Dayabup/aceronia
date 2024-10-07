CREATE DATABASE aceronia;

USE aceronia;

CREATE TABLE usuario (
    id_usuario INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    apellido VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    contraseña VARCHAR(255) NOT NULL,
    direccion VARCHAR(255),
    telefono int(15),
    fecha_inscripcion DATE
);

CREATE TABLE administradores (
    `id` int(11) NOT NULL key AUTO_INCREMENT,
    `admin` varchar(50) NOT NULL,
    `password` varchar(255) NOT NULL
);

CREATE TABLE producto (
    id_producto INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    categoria VARCHAR(255) NOT NULL CHECK (
        Categoria IN (
            'pendientes',
            'collares',
            'pulseras',
            'anillos',
            'piercing'
        )
    ),
    descripcion TEXT NOT NULL,
    precio DECIMAL(10, 2) NOT NULL,
    stock INT NOT NULL,
    fecha_creacion DATE,
    vendidos_mes INT,
    vendidos_semana INT,
    img BLOB,
    id_usuario INT,
    FOREIGN KEY (id_usuario) REFERENCES usuario (id_usuario)
);

CREATE TABLE compra (
    id_compra INT AUTO_INCREMENT PRIMARY KEY,
    id_usuario INT NOT NULL,
    id_producto INT NOT NULL,
    cantidad INT NOT NULL,
    fecha DATE,
    FOREIGN KEY (id_usuario) REFERENCES usuario (id_usuario),
    FOREIGN KEY (id_producto) REFERENCES producto (id_producto)
);

INSERT INTO
    usuario (
        id_usuario,
        nombre,
        apellido,
        email,
        contraseña,
        direccion,
        telefono,
        fecha_inscripcion
    )
VALUES (
        1,
        'Juan',
        'Pérez',
        'juanperez@example.com',
        'contraseña123',
        'Calle Falsa 123',
        '5555555555',
        '2023-11-01'
    ),
    (
        2,
        'María',
        'Rodríguez',
        'mariarodriguez@example.com',
        'contraseña456',
        'Avenida Principal 456',
        '6666666666',
        '2023-12-05'
    ),
    (
        3,
        'Pedro',
        'Gómez',
        'pedrogomez@example.com',
        'contraseña789',
        'Calle Secundaria 789',
        '7777777777',
        '2023-11-15'
    ),
    (
        4,
        'Ana',
        'García',
        'anagarcia@example.com',
        'contraseña111',
        'Calle Larga 111',
        '8888888888',
        '2023-11-20'
    ),
    (
        5,
        'Luis',
        'Martínez',
        'luismartinez@example.com',
        'contraseña222',
        'Calle Corta 222',
        '9999999999',
        '2023-11-25'
    ),
    (
        6,
        'Sofía',
        'Hernández',
        'sofiahernandez@example.com',
        'contraseña333',
        'Avenida Central 333',
        '1111111111',
        '2023-12-01'
    ),
    (
        7,
        'Diego',
        'López',
        'dieголоpez@example.com',
        'contraseña444',
        'Calle Tranquila 444',
        '2222222222',
        '2023-11-05'
    ),
    (
        8,
        'Laura',
        'Santos',
        'laurasantos@example.com',
        'contraseña555',
        'Avenida Amplia 555',
        '3333333333',
        '2023-11-10'
    ),
    (
        9,
        'David',
        'González',
        'davidgonzalez@example.com',
        'contraseña666',
        'Calle Principal 666',
        '4444444444',
        '2023-11-15'
    ),
    (
        10,
        'Marta',
        'Fernández',
        'martafernandez@example.com',
        'contraseña777',
        'Avenida Larga 777',
        '5555555555',
        '2023-11-20'
    ),
    (
        11,
        'Javier',
        'Álvarez',
        'javieralvarez@example.com',
        'contraseña888',
        'Calle Corta 888',
        '6666666666',
        '2023-11-25'
    ),
    (
        12,
        'Sara',
        'Romero',
        'sararomero@example.com',
        'contraseña999',
        'Avenida Central 999',
        '7777777777',
        '2023-12-01'
    ),
    (
        13,
        'Carlos',
        'Moreno',
        'carlosmoreno@example.com',
        'contraseña100',
        'Calle Tranquila 100',
        '8888888888',
        '2023-11-05'
    ),
    (
        14,
        'Andrea',
        'Muñoz',
        'andreamunoz@example.com',
        'contraseña101',
        'Avenida Amplia 101',
        '9999999999',
        '2023-11-10'
    ),
    (
        15,
        'Daniel',
        'Ruiz',
        'danielruiz@example.com',
        'contraseña102',
        'Calle Principal 102',
        '1111111111',
        '2023-11-15'
    );

INSERT INTO
    producto (
        nombre,
        categoria,
        descripcion,
        precio,
        stock,
        fecha_creacion,
        vendidos_mes,
        vendidos_semana
    )
VALUES (
        'Aretes de aro dorados',
        'pendientes',
        'Aretes de aro dorados clásicos y versátiles.',
        25.99,
        50,
        '2023-11-01',
        15,
        3
    ),
    (
        'Pendientes de perla cultivada',
        'pendientes',
        'Elegante par de pendientes con perla cultivada.',
        39.99,
        30,
        '2023-12-05',
        8,
        2
    ),
    (
        'Pendientes de borla',
        'pendientes',
        'Pendientes de borla de colores vibrantes y diseño boho.',
        19.99,
        20,
        '2023-11-15',
        12,
        4
    ),
    (
        'Pendientes de aro con circonitas',
        'pendientes',
        'Aretes de aro con circonitas brillantes.',
        49.99,
        10,
        '2023-11-20',
        5,
        1
    ),
    (
        'Pendientes de estrella',
        'pendientes',
        'Pendientes de estrella pequeños y delicados.',
        19.99,
        25,
        '2023-11-25',
        10,
        2
    ),
    (
        'Pendientes de plumas',
        'pendientes',
        'Pendientes largos con plumas exóticas.',
        39.99,
        15,
        '2023-12-01',
        7,
        2
    ),
    (
        'Pendientes de aro gruesos',
        'pendientes',
        'Aretes de aro gruesos y modernos.',
        29.99,
        20,
        '2023-11-05',
        10,
        3
    ),
    (
        'Pendientes de corazón',
        'pendientes',
        'Pendientes de corazón en plata.',
        25.99,
        30,
        '2023-11-10',
        12,
        4
    ),
    (
        'Pendientes de gota',
        'pendientes',
        'Pendientes de gota de cristal.',
        19.99,
        25,
        '2023-11-15',
        8,
        2
    ),
    (
        'Pendientes de cadena',
        'pendientes',
        'Pendientes largos de cadena con dije.',
        39.99,
        15,
        '2023-11-20',
        7,
        2
    ),
    (
        'Pendientes de aro asimétricos',
        'pendientes',
        'Aretes de aro de diferentes tamaños.',
        29.99,
        20,
        '2023-11-25',
        10,
        3
    ),
    (
        'Pendientes de cruz',
        'pendientes',
        'Pendientes de cruz minimalista.',
        25.99,
        30,
        '2023-12-01',
        12,
        4
    ),
    (
        'Pendientes de luna',
        'pendientes',
        'Pendientes de luna en plata.',
        19.99,
        25,
        '2023-11-05',
        8,
        2
    ),
    (
        'Pendientes de tassel',
        'pendientes',
        'Pendientes de tassel con flecos.',
        39.99,
        15,
        '2023-11-10',
        7,
        2
    ),
    (
        'Pendientes de clip',
        'pendientes',
        'Pendientes de clip sin perforación.',
        29.99,
        20,
        '2023-11-15',
        10,
        3
    );

INSERT INTO
    producto (
        nombre,
        categoria,
        descripcion,
        precio,
        stock,
        fecha_creacion,
        vendidos_mes,
        vendidos_semana
    )
VALUES (
        'Collar de cadena fina con dije de luna',
        'collares',
        'Delicado collar de cadena fina con dije de luna en plata.',
        19.99,
        30,
        '2023-11-01',
        15,
        3
    ),
    (
        'Collar choker con piedras naturales',
        'collares',
        'Collar choker ajustado con piedras naturales de colores.',
        29.99,
        20,
        '2023-12-05',
        8,
        2
    ),
    (
        'Collar largo con dije de infinito',
        'collares',
        'Collar largo con dije de infinito en oro.',
        39.99,
        15,
        '2023-11-15',
        12,
        4
    ),
    (
        'Collar de perlas cultivadas',
        'collares',
        'Elegante collar de perlas cultivadas de diferentes tamaños.',
        49.99,
        10,
        '2023-11-20',
        5,
        1
    ),
    (
        'Collar con dije personalizado',
        'collares',
        'Collar con dije personalizado en acero inoxidable.',
        29.99,
        25,
        '2023-11-25',
        10,
        2
    ),
    (
        'Collar de cadena gruesa',
        'collares',
        'Collar de cadena gruesa con cierre de mosquetón.',
        25.99,
        30,
        '2023-12-01',
        12,
        4
    ),
    (
        'Collar de cadena de eslabones',
        'collares',
        'Collar de cadena de eslabones de diferentes tamaños.',
        19.99,
        25,
        '2023-11-05',
        8,
        2
    ),
    (
        'Collar con dije de corazón',
        'collares',
        'Collar delicado con dije de corazón en oro rosa.',
        39.99,
        15,
        '2023-11-10',
        7,
        2
    ),
    (
        'Collar con dije de ancla',
        'collares',
        'Collar con dije de ancla en plata.',
        29.99,
        20,
        '2023-11-15',
        10,
        3
    ),
    (
        'Collar de cadena con múltiples colgantes',
        'collares',
        'Collar de cadena con múltiples colgantes de diferentes formas.',
        35.99,
        30,
        '2023-11-20',
        12,
        4
    ),
    (
        'Collar de piedras preciosas',
        'collares',
        'Collar con piedras preciosas naturales.',
        99.99,
        5,
        '2023-12-01',
        2,
        1
    ),
    (
        'Collar choker con cristales Swarovski',
        'collares',
        'Collar choker con cristales Swarovski.',
        49.99,
        10,
        '2023-11-05',
        5,
        2
    ),
    (
        'Collar de cadena de serpiente',
        'collares',
        'Collar de cadena de serpiente en oro.',
        39.99,
        15,
        '2023-11-10',
        7,
        2
    ),
    (
        'Collar con dije de estrella',
        'collares',
        'Collar con dije de estrella en plata.',
        29.99,
        20,
        '2023-11-15',
        10,
        3
    ),
    (
        'Collar de cadena con colgante personalizado',
        'collares',
        'Collar de cadena con colgante personalizado.',
        35.99,
        30,
        '2023-11-20',
        12,
        4
    );

INSERT INTO
    producto (
        nombre,
        categoria,
        descripcion,
        precio,
        stock,
        fecha_creacion,
        vendidos_mes,
        vendidos_semana
    )
VALUES (
        'Pulsera de cadena fina con dije de corazón',
        'pulseras',
        'Delicada pulsera de cadena fina con dije de corazón en plata.',
        19.99,
        30,
        '2023-11-01',
        15,
        3
    ),
    (
        'Pulsera de cuero trenzado',
        'pulseras',
        'Pulsera de cuero trenzado con cierre magnético.',
        29.99,
        20,
        '2023-12-05',
        8,
        2
    ),
    (
        'Pulsera de piedras naturales',
        'pulseras',
        'Pulsera elástica con piedras naturales de diferentes colores.',
        19.99,
        25,
        '2023-11-15',
        12,
        4
    ),
    (
        'Pulsera de cadena con dijes personalizados',
        'pulseras',
        'Pulsera de cadena con dijes personalizados en acero inoxidable.',
        29.99,
        10,
        '2023-11-20',
        5,
        1
    ),
    (
        'Pulsera de pandora',
        'pulseras',
        'Pulsera de plata con charms intercambiables.',
        49.99,
        15,
        '2023-11-25',
        10,
        2
    ),
    (
        'Pulsera de cuero con tachuelas',
        'pulseras',
        'Pulsera de cuero con tachuelas metálicas.',
        25.99,
        30,
        '2023-12-01',
        12,
        4
    ),
    (
        'Pulsera de eslabones',
        'pulseras',
        'Pulsera de eslabones gruesos de acero inoxidable.',
        39.99,
        15,
        '2023-11-05',
        8,
        2
    ),
    (
        'Pulsera de tenis',
        'pulseras',
        'Pulsera de tenis con circonitas cúbicas.',
        99.99,
        5,
        '2023-11-10',
        2,
        1
    ),
    (
        'Pulsera de ojo turco',
        'pulseras',
        'Pulsera de ojo turco para protección.',
        19.99,
        25,
        '2023-11-15',
        10,
        3
    ),
    (
        'Pulsera de cadena con dije de infinito',
        'pulseras',
        'Pulsera de cadena con dije de infinito en oro.',
        29.99,
        20,
        '2023-11-20',
        12,
        4
    ),
    (
        'Pulsera de cuero trenzado con piedras',
        'pulseras',
        'Pulsera de cuero trenzado con piedras semipreciosas.',
        35.99,
        30,
        '2023-12-01',
        12,
        4
    ),
    (
        'Pulsera de tobillo',
        'pulseras',
        'Pulsera de tobillo de cadena fina.',
        15.99,
        25,
        '2023-11-05',
        8,
        2
    ),
    (
        'Pulsera de actividad',
        'pulseras',
        'Pulsera de actividad con monitor de frecuencia cardíaca.',
        49.99,
        10,
        '2023-11-10',
        5,
        1
    ),
    (
        'Pulsera de amistad',
        'pulseras',
        'Pulsera de hilo trenzado con dijes personalizados.',
        19.99,
        30,
        '2023-11-15',
        12,
        3
    ),
    (
        'Pulsera de cuero con hebilla',
        'pulseras',
        'Pulsera de cuero con hebilla ajustable.',
        29.99,
        20,
        '2023-11-20',
        10,
        2
    );

INSERT INTO
    producto (
        nombre,
        categoria,
        descripcion,
        precio,
        stock,
        fecha_creacion,
        vendidos_mes,
        vendidos_semana
    )
VALUES (
        'Anillo de plata con circonita cúbica',
        'anillos',
        'Elegante anillo de plata 925 con circonita cúbica de 5mm, ideal para uso diario.',
        29.99,
        30,
        '2023-11-01',
        15,
        3
    ),
    (
        'Anillo de oro amarillo de 18k con diseño minimalista',
        'anillos',
        'Anillo clásico de oro amarillo de 18k, diseño minimalista y atemporal.',
        199.99,
        10,
        '2023-12-05',
        5,
        1
    ),
    (
        'Anillo de compromiso solitario con diamante',
        'anillos',
        'Anillo de compromiso con diamante de 0.5 quilates, talla brillante.',
        999.99,
        5,
        '2023-11-15',
        2,
        1
    ),
    (
        'Anillo de plata con piedra lunar arcoíris',
        'anillos',
        'Anillo de plata con piedra lunar arcoíris, diseño boho chic.',
        25.99,
        20,
        '2023-11-20',
        10,
        2
    ),
    (
        'Anillo de acero inoxidable con grabado personalizado',
        'anillos',
        'Anillo de acero inoxidable con opción de grabado personalizado, ideal para regalos.',
        19.99,
        30,
        '2023-11-25',
        15,
        3
    ),
    (
        'Anillo de oro rosa con diseño floral',
        'anillos',
        'Anillo delicado de oro rosa de 14k con diseño floral.',
        49.99,
        15,
        '2023-12-01',
        7,
        2
    ),
    (
        'Anillo de plata con ónix negro',
        'anillos',
        'Anillo de plata con ónix negro, diseño gótico.',
        39.99,
        20,
        '2023-11-05',
        10,
        3
    );