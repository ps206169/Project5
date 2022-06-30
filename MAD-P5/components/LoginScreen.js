import React, {useContext, useState} from 'react';
import {ActivityIndicator, Button, Text, View} from 'react-native';
import AsyncStorage from '@react-native-async-storage/async-storage';
import { UserAuth } from '../service/Authentication';
import { TextInput } from 'react-native-gesture-handler';


export const LoginScreen = () => {
    const { SetUser } = useContext(UserAuth);

    const [ Email, SetEmail] = useState("");
    const [ Password, SetPassword] = useState("");

    const Login = async (email, password) =>{

        SetPassword("");
        SetEmail("");
        try{
            var myHeaders = new Headers();
            myHeaders.append("Content-Type", "application/json");

            const response = await fetch("", {
                method: "POST",
                headers: myHeaders,
                body: JSON.stringify({
                    email: email,
                    password: password,
                    password_conformation: password,
                }),
            });
        

        //console.log(response);
        if(response.status == 200){
            const data = await response.json();
            console.log(data);
            SetUser(data);

        }
        else {
            alert("Email of wachtwoord is on juist");
            Alert.alert("Email of wachtwoord is on juist");
          }
        }

        catch (error) {
          alert("Fout bij aanroepen van api");
          Alert.alert("Fout bij aanroepen van api");
        }
    
    }
    const login = () => {
        if (Email == "") {
          alert("Email is niet ingevuld");
          Alert.alert("Email is niet ingevuld");
        }
        else if (Password == "") {
          alert("Password is niet ingevuld");
          Alert.alert("Password is niet ingevuld");
    
        }
        else {
    
          LoginStudent(Email, Password);
        }
    
    
      };


  return (
    <View style={styles.container}>
      <Text>Sign In Screen</Text>
      <TextInput
      value={Email}
      onChangeText={(text) => setEmail(text)}
      />
      <TextInput
      value={Password}
      onChangeText={(text) => setPassword(text)}
      />
      <TouchableOpacity style={styles.button} onPress={login}>
          <Text style={{ fontWeight: 'bold', color: '#fff', fontSize: 18 }}> Log In</Text>
        </TouchableOpacity>
        <TouchableOpacity style={styles.button} onPress={() => navigation.goBack()}>
          <Text style={{ fontWeight: 'bold', color: '#fff', fontSize: 18, }}> Terug</Text>
        </TouchableOpacity>
    </View>
  );
};