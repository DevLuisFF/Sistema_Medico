CREATE TABLE `especialidades` (
  `id_especialidad` integer PRIMARY KEY,
  `nombre` varchar(100) UNIQUE NOT NULL
);

CREATE TABLE `medicos` (
  `id_medico` integer PRIMARY KEY,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `telefono` varchar(20),
  `email` varchar(100) UNIQUE,
  `id_especialidad` integer NOT NULL,
  `activo` boolean DEFAULT true
);

CREATE TABLE `pacientes` (
  `id_paciente` integer PRIMARY KEY,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `fecha_nacimiento` date,
  `telefono` varchar(20),
  `email` varchar(100),
  `direccion` text,
  `activo` boolean DEFAULT true
);

CREATE TABLE `citas` (
  `id_cita` integer PRIMARY KEY,
  `id_paciente` integer NOT NULL,
  `id_medico` integer NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `estado` varchar(20) NOT NULL COMMENT 'Pendiente, Confirmada, Cancelada, Atendida',
  `motivo` text,
  `diagnostico` text,
  `tratamiento` text,
  `receta` text,
  `notas` text,
  `created_at` timestamp DEFAULT (now())
);

CREATE TABLE `usuarios` (
  `id_usuario` integer PRIMARY KEY,
  `username` varchar(50) UNIQUE NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `tipo_usuario` varchar(20) NOT NULL COMMENT 'admin, recepcion, medico',
  `id_medico` integer,
  `activo` boolean DEFAULT true
);

CREATE UNIQUE INDEX `citas_index_0` ON `citas` (`id_medico`, `fecha`, `hora`);

ALTER TABLE `medicos` ADD FOREIGN KEY (`id_especialidad`) REFERENCES `especialidades` (`id_especialidad`);

ALTER TABLE `citas` ADD FOREIGN KEY (`id_paciente`) REFERENCES `pacientes` (`id_paciente`);

ALTER TABLE `citas` ADD FOREIGN KEY (`id_medico`) REFERENCES `medicos` (`id_medico`);

ALTER TABLE `usuarios` ADD FOREIGN KEY (`id_medico`) REFERENCES `medicos` (`id_medico`);
