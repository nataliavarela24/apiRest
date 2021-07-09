import React, { useState, useEffect } from 'react';
import getRegiones from '../helpers/getRegiones'

const Select = () => {
   const [validar, setValidar] = useState();
    
    useEffect(() =>{
        updateRegion();
    },[]);
    
    const updateRegion = () => {
        getRegiones()
        .then((newRegiones) => {
            setValidar(newRegiones);
        })
    }
    
    return(
        <select>
            {validar.map((regiones) => (
                <option value={regiones.idRegion} key={regiones.idRegion}>
                    {regiones.nombreregion}
                    </option>
            ))} 
        </select>
    )
}
export default Select;