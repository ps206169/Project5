import { StyleSheet, Text, View } from 'react-native'
import React, { useState, useEffect } from 'react'
import { ActivityIndicator } from 'react-native-paper';

const ExerciseDetailsEN = (props) => {
    const apiSelectedExercise = `http://localhost:8000/api/oefeningen/${props.route.params.id}`;
    const [isLoading, setIsLoading] = useState(true);
    const [data, setData] = useState(null);

    const GetSelectedExercise = async () => {
        try {
            const response = await fetch(apiSelectedExercise);
            const json = await response.json();
            setData(json);
        } catch (error) {
            console.error(error);
        }
        finally {
            setIsLoading(false);
        }
    }

    useEffect(() => { GetSelectedExercise(); }, []);

    return (
        <View style={styles.container}>
            {isLoading ? <ActivityIndicator/>: (
                <Text style={styles.item}>{data.nameEN}</Text>
            )}
            {isLoading ? <ActivityIndicator/>: (
                <Text style={styles.item}>{data.instructionEN}</Text>
            )}
        </View>
    );
}

export default ExerciseDetailsEN;

const styles = StyleSheet.create({
    container: {
        flex: 1,
        backgroundColor: '#fff',
        alignItems: 'center',
        justifyContent: 'center',
    },
    header: {
        fontSize: 20,
        textAlign: 'center',
        margin: 10,
    },
})