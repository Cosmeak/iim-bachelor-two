import * as React from 'react';

import { NavigationContainer } from '@react-navigation/native';
import { createNativeStackNavigator } from '@react-navigation/native-stack';

import Admin from './Admin';

import Rules from './Admin/Rules'
import Question from './Admin/Question'


const Stack = createStackNavigator();

function MyStack() {
  return (
    <Stack.Navigator>
      <Stack.Screen name="Admin" component={Admin} />
      <Stack.Screen name="AdminHome" component={AdminHome} />
      <Stack.Screen name="Notifications" component={Rules} />
      <Stack.Screen name="Profile" component={Question} />
    </Stack.Navigator>
  );
}

export default MyStack;