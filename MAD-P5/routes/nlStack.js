import { StatusBar } from 'expo-status-bar';
import { StyleSheet, TabBarIOSItem, Text, View } from 'react-native';
import { createStackNavigator } from 'react-native-gesture-handler';
import { NavigationContainer } from '@react-navigation/native';
import { createMaterialBottomTabNavigator } from '@react-navigation/material-bottom-tabs';
import { StackView } from '@react-navigation/stack';


const nlStack = () => {
  return (
    <View>
      <Text>nlStack</Text>
    </View>
  )
}

export default nlStack

const styles = StyleSheet.create({})