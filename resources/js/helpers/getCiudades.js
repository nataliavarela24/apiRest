const getCiudades = async() =>{
    const url ="http://localhost:8080/api/ciudades";
    const res = await fetch(url);
    const data =await res.json();
    return data;
}
console.log("data3:",getCiudades());
export default getCiudades;