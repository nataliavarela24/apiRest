const getRegiones = async() =>{
    const url ="http://localhost:8080/api/regiones";
    const res = await fetch(url);
    const data =await res.json();

    const {regiones=[region]}=data;
    const region1={
        region,
    }
    return region1;
}
console.log("data:",getRegiones());
export default getRegiones;