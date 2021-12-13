const formulario = document.getElementById("formulario");
const inputs = document.querySelectorAll("#formulario input");

const codigopostal = {
    01: "\u00C1lava", 02: "Albacete", 03: "Alicante", 04: "Almer\u00EDa", 05: "\u00C1vila", 06: "Badajoz", 07: "Baleares", 08: "Barcelona", 09: "Burgos", 10: "C\u00E1ceres",
    11: "C\u00E1diz", 12: "Castell\u00F3n", 13: "Ciudad Real", 14: "C\u00F3rdoba", 15: "Coruña", 16: "Cuenca", 17: "Gerona", 18: "Granada", 19: "Guadalajara", 20: "Guip\u00FAzcoa",
    21: "Huelva", 22: "Huesca", 23: "Ja\u00E9n", 24: "Le\u00F3n", 25: "Lleida", 26: "La Rioja", 27: "Lugo", 28: "Madrid", 29: "M\u00E1laga", 30: "Murcia",
    31: "Navarra", 32: "Orense", 33: "Asturias", 34: "Palencia", 35: "Las Palmas", 36: "Pontevedra", 37: "Salamanca", 38: "Tenerife", 39: "Cantabria",40: "Segovia",
    41: "Sevilla", 42: "Soria", 43: "Tarragona", 44: "Teruel", 45: "Toledo", 46: "Valencia", 47: "Valladolid", 48: "Vizcaya", 49:"Zamora", 50: "Zamora",
    51: "Ceuta", 52: "Melilla", 
}

const autonomias = {
    Almer\u00EDa: "Andalucía", C\u00E1diz: "Andalucía", C\u00F3rdoba: "Andalucía", Granada: "Andalucía", Huelva: "Andalucía", Ja\u00E9n: "Andalucía", M\u00E1laga: "Andalucía", Sevilla: "Andalucía", 
    Huesca: "Aragón", Teruel: "Aragón", Zaragoza: "Aragón", Asturias: "Asturias", Baleares: "Islas Baleares", LasPalmas: "Islas Canarias", Tenerife: "Islas Canarias", Cantabria: "Cantabria",
    Ávila: "Castilla y León", Burgos: "Castilla y León", León: "Castilla y León", Palencia: "Castilla y León",Salamanca: "Castilla y León", Segovia: "Castilla y León", 
    Soria: "Castilla y León", Valladolid: "Castilla y León", Zamora: "Castilla y León", Albacete: "Castilla-La Mancha", CiudadReal: "Castilla-La Mancha", Cuenca:"Castilla-La Mancha",
    Guadalajara: "Castilla-La Mancha", Toledo: "Castilla-La Mancha", Barcalona: "Cataluña", Girona: "Cataluña", Lleida: "Cataluña", Tarragona: "Cataluña", Alicante: "Comunidad Valenciana",
    Castellón: "Comunidad Valenciana", Valencia: "Comunidad Valenciana", Badajoz: "Extremadura", Cáceres: "Extremadura", Coruña: "Galicia", Lugo: "Galicia", Ourense: "Galicia", 
    Pontevedra: "Galicia", Madrid: "Comunidad de Madrid", Murcia: "Región de Murcia", Navarra: "Comunidad Floral de Navarra", Álava: "País Vasco", Bizkaia: "País Vasco", Guip\u00FAzkoa: "País Vasco",
    LaRioja: "La Rioja", Ceuta: "Ceuta", Melilla: "Melilla",
}

function autorrelleno(){
    let provincia = document.getElementById("provincia");
    let codigo = document.getElementById("postal").value;
    let inicialesCodigoP = codigopostal[parseInt(codigo.substring(0,2))];

    provincia.value = inicialesCodigoP;

    
    let poblacion = document.getElementById("poblacion");
    let valor = provincia.value;

    if(provincia.value == "Las Palmas"){
        poblacion.value = autonomias.LasPalmas;
    }
    else if(provincia.value == "Ciudad Real"){
        poblacion.value = autonomias.CiudadReal;
    }
    else if(provincia.value == "La Rioja"){
        poblacion.value = autonomias.LaRioja;
    }
    else if(provincia.value != "Las Palmas" && provincia.value != "Ciudad Real" && provincia.value != "La Rioja" ){
        poblacion.value = autonomias[valor];
    }
    else{
        console.log("no funciona");
    }
}

inputs.forEach((input) =>{
    input.addEventListener('keyup', autorrelleno);
    input.addEventListener('paste', autorrelleno);
    input.addEventListener('blur', autorrelleno);
});