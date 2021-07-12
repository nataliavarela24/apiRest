const getProvincias = async() =>{
    const url ="http://localhost:8080/api/provincias";
    const res = await fetch(url);
    const data =await res.json();
    return data;
}
console.log("data2:",getProvincias());
export default getProvincias;