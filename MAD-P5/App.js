import React from 'react';
import 'react-native-gesture-handler';
import { StyleSheet, Text, View } from 'react-native';
import { NavigationContainer } from '@react-navigation/native';
import { createStackNavigator } from '@react-navigation/stack';
import LanguageSelect from './routes/LanguageSelect';
import MainScreen from './routes/MainScreen';
import AboutPage from './components/AboutPage';
import {Authentication} from './service/Authentication';

const Stack = createStackNavigator();
const StartStack =() => {
  return(
  <Stack.Navigator >
  <Stack.Screen name="LanguageSelect" component={LanguageSelect} />
  <Stack.Screen name="AboutScreen" component={AboutPage} />
  <Stack.Screen name="MainScreen" component={MainScreen} />
</Stack.Navigator>
  )
}

const App = () => {
  return (<Authentication>
    <NavigationContainer>
     <StartStack></StartStack>
    </NavigationContainer>
    </Authentication>
  );

}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#fff',
    alignItems: 'center',
    justifyContent: 'center',
  },
});

export default App;