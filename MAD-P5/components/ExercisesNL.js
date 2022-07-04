import { Pressable, StyleSheet, Text, View } from 'react-native'
import React, { useEffect, useState } from 'react'

const Exercises = (props) => {
  const api = 'https://eindopdrachtsummamove.nl/api/oefeningen';
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
    fetch(api)
      .then((response) => response.json())
      .then((data) => setData(data))
      .catch((error) => HandleError(error))
      .finally(() => setAvailable(true));
      console.log(api);
  }

  const RenderData = ({ item, index }) => {
    const id = item.id;
    return (
      <View>
        <Pressable onPress={() => props.navigation.push( 'ExerciseDetailsNL', {id})}>
          <Text>{item.id} {item.name}</Text>
        </Pressable>
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

export default Exercises

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
 
})