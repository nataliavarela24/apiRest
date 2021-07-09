import React, { useState, useEffect } from 'react';
import getProvincias from '../helpers/getProvincias'

const Provincia = () => {
   const [validar, setValidar] = useState([]);
    
    useEffect(() =>{
        updateProvincia();
    },[]);
    
    const updateProvincia = () => {
        getProvincias()
        .then((newprovincias) => {
            setValidar(newprovincias);
        })
    }
    console.log("updateProvincia",getProvincias());
    
    return(
        <select>
        
            {validar.map((provincias) => (
                <option value={provincias.idProvincia} key={provincias.idProvincia}>
                    {provincias.nombreprovincia}
                    </option>
            ))} 
        </select>
    )
}
export default Provincia;