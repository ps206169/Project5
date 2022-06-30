import { Pressable, StyleSheet, Text, View } from 'react-native'
import React from 'react'
import { FlatList } from 'react-native-gesture-handler';
import { StatusBar } from 'expo-status-bar';

const Data = [
  {name: 'Nederlands'},
  {name: 'English'},
];

const LanguageSelectStack = (props) => {
  const renderItem = ({item}) => (
    <Pressable onPress={() => props.navigation.push('MainScreen', item)}>
      <Text style={[styles.item, styles.button]}>{item.name}</Text>
    </Pressable>
  );
  
  return (
    <View style={styles.container}>
      <Text style={[styles.title]}>Selecteer een taal</Text>
      <Text style={[styles.title]}>Select a language</Text>
      <FlatList
        style={styles.list}
        data={Data}
        renderItem={renderItem}
        keyExtractor={item => item.name}
      />
    </View>
  )
}

export default LanguageSelectStack

const styles = StyleSheet.create({
  container: {
    flex: 1,
    marginTop: StatusBar.currentHeight || 50,
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
  }
});