import json
datos = [{
	"nombre":"Luis Berganza",
	"id":313,
	"profesor":True,
	"idCursos":(53,765,675),
	"cursos":
		{
			"marketing":"Mi primera app para iPhone",
			"programacion":
				(
				"Objective C",
				"Xcode",
				"Json")
		}
}]

b = json.dumps(datos)
print(b)