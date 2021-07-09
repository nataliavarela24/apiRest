import React, { useState, useEffect } from 'react';
import getCiudades from '../helpers/getCiudades'

const Ciudad = () => {
   const [validar, setValidar] = useState([]);
    
    useEffect(() =>{
        updateCiudad();
    },[]);
    
    const updateCiudad = () => {
        getCiudades()
        .then((newciudad) => {
            setValidar(newciudad);
        })
    }
    console.log("updateCiudad",getCiudades());
    
    return(
        <select>
        
            {validar.map((ciudades) => (
                <option value={ciudades.idCiudad} key={ciudades.idCiudad}>
                    {ciudades.nombreciudad}
                    </option>
            ))} 
        </select>
    )
}
export default Ciudad;