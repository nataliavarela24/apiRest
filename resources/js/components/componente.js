import React, { Component } from 'react';
import Select from './select';
import ReactDOM from 'react-dom';

export default class Componente extends Component {
    render() {
        return (
            <div className="componente">
              <Select/>
            </div>
        );
    }
}

if (document.getElementById('componente')) {
    ReactDOM.render(<Componente />, document.getElementById('componente'));
}