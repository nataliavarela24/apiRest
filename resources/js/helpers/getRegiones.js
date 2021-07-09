const getRegiones = async() =>{
    const url ="http://127.0.0.1:8000/api/regiones";
    const res = await fetch(url);
    const data =await res.json();
    return data;
}
export default getRegiones;