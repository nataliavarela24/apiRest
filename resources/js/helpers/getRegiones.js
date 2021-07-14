const getRegiones = async() =>{
    const url ="http://localhost:8080/api/regiones";
    const res = await fetch(url);
    const data =await res.json();
    console.log("data:",data);
    return data;
}
export default getRegiones;