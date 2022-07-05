import { StatusBar, StyleSheet, Text, View } from 'react-native'
import React from 'react'
import { NavigationContainer } from '@react-navigation/native';
import { createStackNavigator } from '@react-navigation/stack';
import { createMaterialBottomTabNavigator } from '@react-navigation/material-bottom-tabs';
import ExercisesEN from '../components/ExercisesEN';
import ExercisesNL from '../components/ExercisesNL';
import ExerciseDetailsNL from '../components/ExerciseDetailsNL';
import ExerciseDetailsEN from '../components/ExerciseDetailsEN';
import CreateExercise from '../components/CreateExercise';

const Tab = createMaterialBottomTabNavigator();
const Stack = createStackNavigator();

const NLStack = () => {
  return (
    <Stack.Navigator>
      <Stack.Screen name="ExercisesNL" component={ExercisesNL} />
      <Stack.Screen name="ExerciseDetailsNL" component={ExerciseDetailsNL} />
    </Stack.Navigator>
  )
}

const ENStack = () => {
  return (
    <Stack.Navigator>
      <Stack.Screen name="ExercisesEN" component={ExercisesEN} />
      <Stack.Screen name="ExerciseDetailsEN" component={ExerciseDetailsEN} />
    </Stack.Navigator>
  )
}

const MainScreen = (props) => {
    console.log('In MyTabs van MainScreen.js', props);
       if (props.route.params.name === 'Nederlands') {
            return (
                <Tab.Navigator>
                    <Tab.Screen name="NLStack" component={NLStack} />
                    <Tab.Screen name="CreateExercise" component={CreateExercise} />
                </Tab.Navigator>
            )
        }
        if (props.route.params.name === 'English') {
            return (
                <Tab.Navigator>
                    <Tab.Screen name="ENStack" component={ENStack} />
                    <Tab.Screen name="CreateExercise" component={CreateExercise} />
                </Tab.Navigator>
            )
        }
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