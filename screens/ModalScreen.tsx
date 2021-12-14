import { StatusBar } from 'expo-status-bar';
import * as React from 'react';
import { Platform, StyleSheet } from 'react-native';

import EditScreenInfo from '../components/EditScreenInfo';
import { Text, View } from '../components/Themed';

export default function ModalScreen() {
  return (
    <View style={styles.container}>
      <View style={styles.rules}>
        <Text style={styles.Title} >Règle N°1 : Question sur Tuiles</Text>
        <Text style={styles.Text} >Case contrat : Une question sur chacun des bâtiments en particulier</Text>
        <Text style={styles.Text} >VS : Une question de rapidité</Text>
        <Text style={styles.Text} >Multifruit : Une question sur une date (avec un classement à la fin du plus proche au plus loin)</Text>
        <Text style={styles.Text} >Flèches : Une question de culture général</Text>
      </View>

      <View style={styles.rules}>
        <Text style={styles.Title} >Règle N°2 : Action disponible sur les tuiles</Text>
        <Text style={styles.Text} >Cases contrats : Si l’on a les ressources suffisantes on peut construire le bâtiment associé / le racheter à la personne qui le possède pour 3fois le prix du bâtiment / l’amélioré d’un niveau s’il nous appartient déjà</Text>
        <Text style={styles.Text} >VS : le gagnant prend des ressources du perdant</Text>
        <Text style={styles.Text} >Multifruit : Le 1er gagne beaucoup de ressources, le 2eme gagne un peu moins de ressources ect…</Text>
        <Text style={styles.Text} >Flèches : Le joueur peut changer de place un bâtiment (Attention deux bâtiments doivent être à minimum de cases de distance et ne doivent pas bloquer de joueur sur une case)</Text>
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
