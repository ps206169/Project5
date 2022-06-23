import { StatusBar } from 'expo-status-bar';
import { StyleSheet, TabBarIOSItem, Text, View } from 'react-native';
import { createStackNavigator } from 'react-native-gesture-handler';
import { NavigationContainer } from '@react-navigation/native';
import { createMaterialBottomTabNavigator } from '@react-navigation/material-bottom-tabs';
import makkelijkScreen from './components/makkelijkScreen';
import makkelijkDetailScreen from './components/makkelijkDetailScreen';
import gemiddeldScreen from './components/gemiddeldScreen';
import gemiddeldDetailScreen from './components/gemiddeldDetailScreen';
import { StackView } from '@react-navigation/stack';


const Tab = createMaterialBottomTabNavigator();
const Stack = createStackNavigator();

const makkelijkStack = () => {
  return(
    <Stack.Navigator>
      <Stack.Screen name="makkelijkListStack" component={makkelijkScreen} />
      <Stack.Screen name="makkelijkDetailStack" component={makkelijkDetailScreen} />
    </Stack.Navigator>
  )
}

const gemiddeldStack = () => {
  return(
    <Stack.Navigator>
      <Stack.Screen name="gemiddeldListStack" component={gemiddeldScreen} />
      <Stack.Screen name="gemiddeldDetailStack" component={gemiddeldDetailScreen} />
    </Stack.Navigator>
  )
}

const moeielijkStack = () => {
  return(
    <Stack.Navigator>
      <Stack.Screen name="moeilijkListStack" component={moeilijkScreen} />
      <Stack.Screen name="moeilijkDetailStack" component={moeilijkDetailScreen} />
    </Stack.Navigator>
  )
}

const MyTabs = () => {
  return (
    <Tab.Navigator>
      <Tab.Screen name="makkelijk" component={makkelijkStack} />
      <Tab.Screen name="gemiddeld" component={gemiddeldStack} />
      <Tab.Screen name="moeilijk" component={moeielijkStack} />
    </Tab.Navigator>
  )
}

const App = () => {
  return (
    <NavigationContainer>
      <MyTabs />
    </NavigationContainer>
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