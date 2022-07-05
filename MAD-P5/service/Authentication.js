import React, { children } from 'react'
const UserAuth = React.createContext();



const Authentication = ({ children }) => {
    const [User, SetUser] = React.useState([]);
  return (
    <UserAuth.Provider value={{ User, SetUser }}>
        { children }
    </UserAuth.Provider>
  )
}

export { Authentication , UserAuth };

