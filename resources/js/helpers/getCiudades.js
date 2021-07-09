const getCiudades = async() =>{
    const url ="http://127.0.0.1:8000/api/ciudades";
    const res = await fetch(url);
    const data =await res.json();
    return data;
}
console.log("data3:",getCiudades());
export default getCiudades;