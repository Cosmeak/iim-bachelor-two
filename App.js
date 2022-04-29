import * as React from 'react';
import { NavigationContainer } from '@react-navigation/native';
import { createNativeStackNavigator } from '@react-navigation/native-stack';
import { createBottomTabNavigator } from '@react-navigation/bottom-tabs';

import HomeScreen from './screens/HomeScreen';
import Admin from "./screens/Admin";
import WaitingRoom from './screens/WaitingRoom';


const HomeStack = createNativeStackNavigator();

const HomeStackScreen = () => {
  return(
    <NavigationContainer>
        <HomeStack.Navigator>
          <HomeStack.Screen name="Home" component={HomeScreen} options={{headerShown:false}} />
          <HomeStack.Screen name="Admin" component={Admin} options={{headerShown:false}} />
          <HomeStack.Screen name="WaitingRoom" component={WaitingRoom} options={{headerShown:false}} />
        </HomeStack.Navigator>
      </NavigationContainer>
  )
}


export default HomeStackScreen;