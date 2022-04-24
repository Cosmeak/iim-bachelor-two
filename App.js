import * as React from 'react';
import { Button, View, Text } from 'react-native';
import { NavigationContainer } from '@react-navigation/native';
import { createNativeStackNavigator } from '@react-navigation/native-stack';
import { createBottomTabNavigator } from '@react-navigation/bottom-tabs';

import HomeScreen from './screens/HomeScreen';
import GameView from './screens/GameView';
import Admin from "./screens/Admin";
import RessourcePlayer from './screens/RessourcePlayer';


const Tab = createBottomTabNavigator();

const HomeStack = createNativeStackNavigator();





function HomeStackScreen(){
  return(
      <HomeStack.Navigator>
        <HomeStack.Screen name="Home" component={HomeScreen} options={{headerShown:false}} />
        <HomeStack.Screen name="Admin" component={Admin} options={{headerShown:false}} />
        <HomeStack.Screen name="Game" component={GameView} options={{headerShown:false}} />
        <HomeStack.Screen name="Ressource" component={RessourcePlayer} options={{headerShown:false}} />
      </HomeStack.Navigator>
  )
}


const Navigation = () =>{
  return(
    <NavigationContainer>
      <Tab.Navigator>
        <Tab.Screen name="Home" component={HomeStackScreen} options={{headerShown:false}} />
        <Tab.Screen name="Admin" component={Admin} options={{headerShown:false}} />
        <Tab.Screen name="Game" component={GameView} options={{headerShown:false}} />
        <Tab.Screen name="Ressource" component={RessourcePlayer} options={{headerShown:false}} />
      </Tab.Navigator>
    </NavigationContainer>
  )
}



export default Navigation;
