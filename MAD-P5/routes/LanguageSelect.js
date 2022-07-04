import { Pressable, StyleSheet, Text, View } from 'react-native'
import React from 'react'
import { FlatList } from 'react-native-gesture-handler';
import { StatusBar } from 'expo-status-bar';
import { NavigationContainer } from '@react-navigation/native';
import { createStackNavigator } from '@react-navigation/stack';
import AboutPage from '../components/AboutPage';

const stack = createStackNavigator();

const Data = [
  {name: 'Nederlands'},
  {name: 'English'},
];

const LanguageSelect = (props) => {
  const renderItem = ({item}) => (
    <Pressable onPress={() => props.navigation.push('MainScreen', item)}>
      <Text style={[styles.item, styles.button]}>{item.name}</Text>
    </Pressable>
  );
  
  return (
    <View style={styles.container}>
      <Pressable onPress={() => props.navigation.push('AboutScreen')}>
        <Text style={styles.about}>About/Over ons</Text>
      </Pressable>
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

export default LanguageSelect

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
  }
});