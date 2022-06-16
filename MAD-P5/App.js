import { StatusBar } from 'expo-status-bar';
import { StyleSheet, TabBarIOSItem, Text, View } from 'react-native';
import { createStackNavigator } from 'react-native-gesture-handler';
import { NavigationContainer } from '@react-navigation/native';
import { createMaterialBottomTabNavigator } from '@react-navigation/material-bottom-tabs';
import makkelijkScreen from './components/makkelijkScreen';
import makkelijkDetailScreen from './components/makkelijkDetailScreen';
import gemiddeldScreen from './components/gemiddeldScreen';
import gemiddeldDetailScreen from './components/gemiddeldDetailScreen';


const Tab = createMaterialBottomTabNavigator();
const stack = createStackNavigator();

const MyTabs = () => {
  return (
    <Tab.Navigator>
      <Tab.Screen name="makkelijk" component={makkelijkScreen} />
      <Tab.Screen name="gemiddeld" component={gemiddeldScreen} />
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