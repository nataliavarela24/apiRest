const getProvincias = async() =>{
    const url ="http://127.0.0.1:8000/api/provincias";
    const res = await fetch(url);
    const data =await res.json();
    return data;
}
console.log("data2:",getProvincias());
export default getProvincias;