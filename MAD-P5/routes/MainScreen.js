import { StatusBar, StyleSheet, Text, View } from 'react-native'
import React from 'react'
import { NavigationContainer } from '@react-navigation/native';
import { createMaterialBottomTabNavigator } from '@react-navigation/material-bottom-tabs';
import ExercisesEN from '../components/ExercisesEN';
import ExercisesNL from '../components/ExercisesNL';

const Tab = createMaterialBottomTabNavigator();

const MyTabs = (props) => {
    console.log(props);
/*    if (props.route.params.name === 'Nederlands') {
        return (
            <Tab.Navigator>
                <Tab.Screen name="ExercisesNL" component={ExercisesNL} />
            </Tab.Navigator>
        )
    }
    if (props.route.params.name === 'English') {
        return (
            <Tab.Navigator>
                <Tab.Screen name="ExercisesEN" component={ExercisesEN} />
            </Tab.Navigator>
        )
    }
*/
    return (
        <Text>hi</Text>
    )
}

const MainScreen = () => {
    return (
    <MyTabs />
  )
}

export default MainScreen

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
  });