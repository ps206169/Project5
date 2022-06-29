import { Pressable, StyleSheet, Text, View } from 'react-native'
import React from 'react'
import { FlatList } from 'react-native-gesture-handler';
import { StatusBar } from 'expo-status-bar';

const Data = [
  {name: 'English'},
  {name: 'Nederlands'},
];

const LanguageSelectStack = (props) => {
  const renderItem = ({item}) => (
    <Pressable onPress={() => props.navigation.push('LanguageSelect', item)}>
      <Text style={[styles.item, styles.title, styles.button]}>{item.name}</Text>
    </Pressable>
  );
  
  return (
    <View>
      <Text style={[styles.title]}>Selecteer een taal</Text>
      <Text style={[styles.title]}>Select a language</Text>
      <FlatList
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
    marginTop: StatusBar.currentHeight || 0,
  },
  item: {
    padding: 20,
    marginVertical: 8,
    marginHorizontal: 16,
  },
  title: {
    textAlign: 'center',
    fontSize: 32,
  },
  button: {
    backgroundColor: '#DDDDDD',
    padding: 10,
    marginVertical: 10,
    marginHorizontal: 16,
  },
});