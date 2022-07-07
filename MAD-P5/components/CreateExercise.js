import { Button, Pressable, StyleSheet, Text, View } from 'react-native'
import React, { useState } from 'react'
import { TextInput } from 'react-native-gesture-handler';

const Exercise = () => {
    const api = 'http://localhost:8000/api/oefeningen';
    const [nameNL, setNameNL] = useState('');
    const [nameEN, setNameEN] = useState('');
    const [descriptionNL, setDescriptionNL] = useState('');
    const [descriptionEN, setDescriptionEN] = useState('');

    const CreateExercise = async () => {
        
        let requestOptions = {
            method: 'POST',
            headers: {            
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            },
            body: JSON.stringify({
                nameNL: nameNL,
                nameEN: nameEN,
                instructionNL: descriptionNL,
                instructionEN: descriptionEN,
                })
        };
        try{
            const response = await fetch(api, requestOptions);
            const json = await response.json();      
            console.log(json);  
        }
        catch(error){
            console.log(error);
        }


        /*fetch(api, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json'
            },
            body: JSON.stringify({
                nameNL: nameNL,
                nameEN: nameEN,
                descriptionNL: descriptionNL,
                descriptionEN: descriptionEN,
                })
        }).then(response => response.json())
        .then(json => {
            console.log(json);
        }).catch(error => {
            console.error("fout", error);
        });*/
    }

  return (
    <View style={styles.container}>
      <Text style={styles.header}>Vul deze velden in/Fill in the following fields</Text>
      <Text style={styles.header}>Nederlandse naam</Text>
        <TextInput
            style={styles.input}
            onChangeText={(text) => setNameNL(text)}
            value={nameNL}
        />
        <Text style={styles.header}>Nederlandse instructie</Text>
        <TextInput
            style={styles.input}
            onChangeText={(text) => setDescriptionNL(text)}
            value={descriptionNL}
        />
        <Text style={styles.header}>Engelse naam</Text>
        <TextInput
            style={styles.input}
            onChangeText={(text) => setNameEN(text)}
            value={nameEN}
        />
        <Text style={styles.header}>Engelse instructie</Text>
        <TextInput
            style={styles.input}
            onChangeText={(text) => setDescriptionEN(text)}
            value={descriptionEN}
        />
        <Button title="oefening aanmaken" onPress={() => CreateExercise()} />
    </View>
  )
}

export default Exercise

const styles = StyleSheet.create({
    container: {
        flex: 1,
        justifyContent: 'center',
        alignItems: 'center',
        backgroundColor: '#F5FCFF',
        padding: 10
    },
    input: {
        borderWidth: 1,
        borderColor: 'black',
        margin: 10,
        padding: 10,
        width: 200,
    },
    button: {
        backgroundColor: '#DDDDDD',
        padding: 10,
        margin: 10,
        width: 200,
        borderWidth: 1,
    },
    header: {
        fontSize: 20,
        textAlign: 'center',
        margin: 10
    },

})