import React, { useState, useEffect } from 'react';
import axios from 'axios';

const TablaUsuarios = () => {
  const [usuarios, setUsuarios] = useState([]);

  useEffect(() => {
    axios.get('/api/users-with-domicilios-and-age')
      .then(response => {
        setUsuarios(response.data);
      })
      .catch(error => {
        console.error('Error fetching usuarios', error);
      });
  }, []);

  return (
    <div>
      <h1>Tabla de Usuarios</h1>
      <table>
        <thead>
          <tr>
            <th>Nombre de usuario</th>
            <th>Fecha de Nacimiento</th>
            <th>Edad</th>
            <th>Dirección</th>
          </tr>
        </thead>
        <tbody>
          {usuarios.map(usuario => (
            <tr key={usuario.id}>
              <td>{usuario.nombre}</td>
              <td>{usuario.fecha_nacimiento}</td>
              <td>{usuario.edad}</td>
              <td>{`${usuario.domicilio.domicilio}, ${usuario.domicilio.numero_exterior}, ${usuario.domicilio.colonia}, ${usuario.domicilio.cp}, ${usuario.domicilio.ciudad}`}</td>
            </tr>
          ))}
        </tbody>
      </table>
    </div>
  );
};

export default TablaUsuarios;
