class Estudiante:
    def __init__(self, nombre, promedio):
        self.nombre = nombre
        self.promedio = promedio

lista_estudiantes = [
    Estudiante("Sara", 4),
    Estudiante("Pedrito", 12),
    Estudiante("Alicia", 16),
    Estudiante("Frednali", 20),
    Estudiante("Jose", 18)
]


estudiantes_filtrados = list(filter(lambda e: e.promedio > 14, lista_estudiantes))

print("Los Estudiantes con Promedio mayor a 14 : ")
for estudiantes in estudiantes_filtrados:
    print(f"Nombre: {estudiantes.nombre}, con Promedio: {estudiantes.promedio}")