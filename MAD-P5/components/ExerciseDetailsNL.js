import { StyleSheet, Text, View } from 'react-native'
import React, { useState, useEffect } from 'react'

const ExerciseDetailsNL = () => {
    const apiSelectedExercise = `https://eindopdrachtsummamove.nl/api/oefeningen/${props.route.params.id}`;
    const [isAvailable, setAvailable] = useState(false);
    const [data, setData] = useState(null);

    useEffect(() => { GetData(); }, []);

    const HandleError = (error) => {
        console.log(error);
        setData(
            {
                results: [{
                    name: 'Er is een fout opgetreden. Start de applicatie opnieuw op. '
                        + 'Blijft het probleem optreden, waarschuw dan de service desk.'
                }]
            }
        )
    }

    const GetData = () => {
        fetch(apiSelectedExercise)
            .then((response) => response.json())
            .then((data) => setData(data))
            .catch((error) => HandleError(error))
            .finally(() => setAvailable(true));
    }

    const RenderData = ({ item, index }) => {
        const id = item.id;
        return (
            <View>
                <Text>{item.instructionNL}</Text>
            </View>
        )
    }

    return (
        <View style={styles.container}>
            {isAvailable
                ?
                (
                    <View style={styles.container}>
                        <FlatList
                            data={data.results}
                            renderItem={RenderData}
                            keyExtractor={(item, index) => item.id + item.nameNL + index}
                        />
                    </View>
                )
                :
                (
                    <View style={styles.container}>
                        <Text>Er is een fout opgetreden. Start de applicatie opnieuw op. '
                                + 'Blijft het probleem optreden, waarschuw dan de service desk.'
                        </Text>
                    </View>
                )
            }
        </View>
    )
}

export default ExerciseDetailsNL;

const styles = StyleSheet.create({})