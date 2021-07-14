import React, { useState, useEffect } from 'react';
import getRegiones from '../helpers/getRegiones'

const Select = () => {
   const [validar, setValidar] = useState([]);
    
    useEffect(() =>{
        updateRegion();
    },[]);
    
    const updateRegion = () => {
        getRegiones()
        .then((newregiones) => {
            setValidar(newregiones);
        })
        .catch((error) => {
            console.log(error);
          })
    }
    console.log("updateRegion",getRegiones());
    
    return(
        <select>
        
            {validar.map((regiones) => (
                <option value={regiones.idRegion} key={regiones.idRegion}>
                    {regiones.nombreRegion}
                    </option>
            ))} 
        </select>
    )
}
export default Select;