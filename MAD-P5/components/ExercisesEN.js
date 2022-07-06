import { Pressable, StyleSheet, Text, View } from 'react-native'
import React, { useEffect, useState } from 'react'
import { ActivityIndicator } from 'react-native-paper';
import { FlatList } from 'react-native-gesture-handler';

const Exercises = (props) => {
  const api = 'http://127.0.0.1:8000/api/oefeningen';
  const [isLoading, setIsLoading] = useState(true);
  const [data, setData] = useState(null);

  const GetExercisesEN = async () => {
    try {
      const response = await fetch(api);
      const json = await response.json();
      setData(json);
    } catch (error) {
      console.error(error);
    }
    finally {
      setIsLoading(false);
    }
  }

  useEffect(() => { GetExercisesEN(); }, []);


  return (
    <View style={styles.container}>
      {isLoading ? <ActivityIndicator/>: (
        <FlatList
          data={data}
          renderItem={({ item }) => (
            <Pressable onPress={() => props.navigation.navigate('ExerciseDetailsEN', { id: item.id })}>
              <Text style={styles.item}>{item.nameEN}</Text>
            </Pressable>
          )}
          keyExtractor={item => item.id}
        />
      )}
    </View>
  )
}

export default Exercises;

const styles = StyleSheet.create({
  container: { 
    flex: 1,
    justifyContent: 'center',
    alignItems: 'center',
    backgroundColor: '#F5FCFF',
    padding: 10
  },
  header: {
    fontSize: 20,
    textAlign: 'center',
    margin: 10
  },
  item: {
    padding: 10,
    marginVertical: 8,
    marginHorizontal: 16,
    marginTop: 16,
    textAlign: 'center',
    fontSize: 32,
  }
})