import React, { useContext, useState} from 'react';
import {StatusBar, Text, View, StyleSheet, TouchableOpacity, Alert} from 'react-native';
import { UserAuth } from '../service/Authentication';
import { TextInput } from 'react-native-gesture-handler';


const Login = ({navigation}) => {
    const { SetUser } = useContext(UserAuth);

    const [ Email, SetEmail] = useState("");
    const [ Password, SetPassword] = useState("");

    const LoginScreen = async (email, password) =>{

        SetPassword("");
        SetEmail("");
        try{
            var myHeaders = new Headers();
            myHeaders.append("Content-Type", "application/json");

            const response = await fetch("https://eindopdrachtsummamove.nl/api/login/", {
                method: "POST",
                headers: myHeaders,
                body: JSON.stringify({
                    email: email,
                    password: password,
                    
                }),
            });
        

        //console.log(response);
        if(response.status == 200){
            const data = await response.json();
            console.log(data);
            SetUser(data);
          Alert.alert("Succes!");
        }
        else {
            alert("Email of wachtwoord is on juist");
            Alert.alert("Email of wachtwoord is on juist");
          }
        }

        catch (error) {
          alert(error);
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
    
          LoginScreen(Email, Password);
        }
    
    
      };


  return (
    <View style={styles.container}>
      <Text>Sign In Screen</Text>
      <TextInput
      value={Email}
      onChangeText={(text) => SetEmail(text)}
      />
      <TextInput
      value={Password}
      onChangeText={(text) => SetPassword(text)}
      />
      <TouchableOpacity style={styles.button} onPress={login}>
          <Text style={{ fontWeight: 'bold', color: '#fff', fontSize: 18 }}> Log In</Text>
        </TouchableOpacity>
        <TouchableOpacity style={styles.button} onPress={() => navigation.goBack()}>
          <Text style={{ fontWeight: 'bold', color: '#fff', fontSize: 18, }}> Terug</Text>
        </TouchableOpacity>
    </View>
  )
}
export default Login


const styles = StyleSheet.create({
  container: {
    flex: 1,
    marginTop: StatusBar.currentHeight || 50,
  },
  about: {
    textAlign: 'center',
  },
  item: {
    padding: 20,
    marginVertical: 8,
    marginHorizontal: 16,
    marginTop: 16,
    textAlign: 'center',
    fontSize: 32,
  },
  title: {
    textAlign: 'center',
    fontSize: 32,
    fontWeight: 'bold',
  },
  button: {
    backgroundColor: '#DDDDDD',
    padding: 10,
    marginVertical: 10,
    marginHorizontal: 16,
    borderRadius: 10,
  },
  list: {
    display: 'flex',
    flex: 1,
    padding: 20,
    margin: 20,
    backgroundColor: '#fff',
  },
});