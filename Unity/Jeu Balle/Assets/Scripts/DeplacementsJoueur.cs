using TMPro;
using System.Collections;
using System.Collections.Generic;
using Unity.VisualScripting;
using UnityEngine;
using UnityEngine.InputSystem;
// Je mets la classe de base MonoBehavior. Elle me permet d'utiliser des méthodes spéciales comme Start(), Update(), FixedUpdate(), etc...
public class DeplacementsJoueur : MonoBehaviour
{
    // Rigidbody est un composant Unity qui permet de gérer la physique (gravité, collisions, forces, etc...)
    private Rigidbody rb;
    // J'ajoute les mouvements sur les axes X et Y
    private float movementX;
    private float movementY;
    // De quoi changer la vitesse du joueur dans Unity
    public float speed = 0; 
    public TextMeshProUGUI Compteur;
    public GameObject WinTextObject;

    private int count;


    
    void Start()
    {
        rb = GetComponent <Rigidbody>(); 
        count = 0;
        SetCompteur();
        WinTextObject.SetActive(false);
    }

    void OnMove (InputValue movementValue)
   {
        Vector2 movementVector = movementValue.Get<Vector2>();
        movementX = movementVector.x; 
        movementY = movementVector.y; 
   }

   void SetCompteur()
   {
        Compteur.text = "Compteur: " + count.ToString();
        if(count >= 12)
        {
            WinTextObject.SetActive(true);
            Destroy(GameObject.FindGameObjectWithTag("Enemy"));
        }
   }

    void FixedUpdate() 
   {
    // Mon Vector3 convertit le mouvement 2D (x, y) en 3D (x, 0, y) 
   Vector3 movement = new Vector3 (movementX, 0.0f, movementY);
    rb.AddForce(movement * speed);
   }

   private void OnTriggerEnter(Collider other)
   {
        if (other.gameObject.CompareTag("PickUp")) 
        {
            other.gameObject.SetActive(false);
            count = count + 1;
            SetCompteur();
        }

    }
    private void OnCollisionEnter(Collision collision)
    {
        if (collision.gameObject.CompareTag("Enemy"))
        {
        // Destroy the current object
        Destroy(gameObject);
        // Update the winText to display "You Lose!"
        WinTextObject.gameObject.SetActive(true);
        WinTextObject.GetComponent<TextMeshProUGUI>().text = "Perdu!";
        }
    }

}