from django.db import models

class Estudiante(models.Model):
    nombre = models.CharField(max_length=100)
    correo = models.CharField(max_length=100, unique=True)
    edad = models.IntegerField()

    # Comentario explicando por qué usar el ORM es más seguro/rápido:
    # 1. Primero, es muchísimo más rápido de programar porque, en vez de estar armando código SQL a mano con los INSERT INTO o 
    # los SELECT como nos tocó hacer en el archivo de PHP, aquí manejamos todo como si fueran simples objetos de Python.
    # Uno escribe menos código, se lee más fácil y no hay problemas con que si faltó una comilla o un punto y coma en la consulta.
    # Y por el lado de la seguridad, es mil veces mejor porque el ORM ya viene blindado por debajo. Él solito hace el trabajo 
    # de filtrar y limpiar todo lo que mete el usuario en los formularios, así que nos protege de las famosas inyecciones SQL 
    # automáticamente. 