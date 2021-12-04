import { StatusBar } from 'expo-status-bar';
import * as React from 'react';
import { Platform, StyleSheet } from 'react-native';

import EditScreenInfo from '../components/EditScreenInfo';
import { Text, View } from '../components/Themed';

export default function ModalScreen() {
  return (
    <View style={styles.container}>
      <View style={styles.rules}>
        <Text style={styles.Title} >Règle N°1</Text>
        <Text style={styles.Text} >On ne doit pas faire djoeezjfpozeaf ezoafjpaz fonopanfpzao fean fpzannf nfizafn zpafn naznf zapf az...</Text>
      </View>

      <View style={styles.rules}>
        <Text style={styles.Title} >Règle N°2</Text>
        <Text style={styles.Text} >On ne doit pas faire djoeezjfpozeaf...</Text>
      </View>

      {/* Il faut faire la db puis faire les boucles d'insertions des données stocker dedans pour afficher les règles avec le design du dessus */}

      {/* Use a light status bar on iOS to account for the black space above the modal */}
      <StatusBar style={Platform.OS === 'ios' ? 'light' : 'auto'} />
    </View>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    flexDirection: 'column',
    alignItems: 'center',
    padding: 16,
  },
  rules: {
    width: '100%',
    alignItems: 'center',
    backgroundColor: 'gray',
    borderRadius: 10,
    padding: 16,
    marginBottom: 16,
  },
  Title: {
    fontSize: 20,
    paddingBottom: 4,
    paddingLeft: 8, 
    paddingRight: 8,
    marginBottom: 16,
    borderBottomWidth: 1, 
    borderBottomColor: 'white',
  },
  Text: {
    fontSize: 16,
    width: '100%',
  }
});
