CREATE OR REPLACE FUNCTION

-- declaramos la función y sus argumentos
contras (uid int, unombre varchar(100), rut varchar(100), edad int, sexo varchar(100))


-- declaramos lo que retorna, en este caso un booleano
RETURNS VOID AS $$

DECLARE
rut varchar;

-- definimos nuestra función
BEGIN

    -- verificar si existe la columna contrasena, si no existe la agregamos y seteamos la contraseña aleatoriamente
    IF 'contrasena' NOT IN (SELECT column_name FROM information_schema.columns WHERE table_name='usuarios') THEN
        ALTER TABLE usuarios ADD contrasena int;
        UPDATE usuarios SET contrasena = substring(rut, 0, 4);
    END IF;

    IF 'contrasena' IN (SELECT column_name FROM information_schema.columns WHERE table_name='usuarios') THEN
        UPDATE usuarios SET contrasena = substring(rut, 0, 4);
    END IF;

-- finalizamos la definición de la función y declaramos el lenguaje
END
$$ language plpgsql