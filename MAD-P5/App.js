import { StatusBar } from 'expo-status-bar';
import { StyleSheet, TabBarIOSItem, Text, View } from 'react-native';
import { createStackNavigator } from 'react-native-gesture-handler';
import { NavigationContainer } from '@react-navigation/native';
import { createMaterialBottomTabNavigator } from '@react-navigation/material-bottom-tabs';
import { StackView } from '@react-navigation/stack';
import languageScreen from './components/languageScreen';
import enStack from './routes/enStack';
import nlStack from './routes/nlStack';

const Tab = createMaterialBottomTabNavigator();
const Stack = createStackNavigator();

const languageSelect = () => {
  return(
    <Stack.Navigator>
      <Stack.Screen name="languageSelectScreen" component={languageScreen} />
      <Stack.Screen name="nlScreen" component={nlStack} />
      <Stack.Screen name="enScreen" component={enStack} />
    </Stack.Navigator>
  )
}


const App = () => {
  return (
    languageSelect()
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