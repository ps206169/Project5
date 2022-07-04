import { StyleSheet, Text, View } from 'react-native'
import React from 'react'

const api = "https://eindopdrachtsummamove.nl/api/oefeningen";
const [isExerciseAvailable, setExerciseAvailable] = useState(false);
const [exercises, setExercises] = useState(null);

const errorHandling = (error) => {
  console.log(error);
  setExercises(
    {
      count: '***ERROR***',
      next: null,
      previous: null,
      results: [
        { name: 'Er is een fout opgetreden. Start de applicatie opnieuw op. '
         + 'Blijft het probleem optreden, waarschuw dan de service desk.' }
      ]
    })
}

const getExercises = () => {
  fetch(api)
    .then((response) => response.json())
    .then((data) => setExercises(data))
    .catch((error) => errorHandling(error))
    .finally(() => setExerciseAvailable(true));
}


const ExercisesNL = () => {
  return (
    <View>
      <Pressable onPress={() => props.navigation.push('ExerciseDetails', { id: exercises.results[0].id })}>
        <Text>{exercises.results[0].name}</Text>
      </Pressable>
    </View>
  )
}

export default ExercisesNL

const styles = StyleSheet.create({})